#include <WiFi.h>
#include <HTTPClient.h>
#include <Arduino_JSON.h>
#include "DHT.h"
#include "time.h"  // Librería para sincronizar fecha y hora con NTP

// Configuración del sensor DHT11
#define DHTPIN 15
#define DHTTYPE DHT11
DHT dht11_sensor(DHTPIN, DHTTYPE);

// Pin del LED integrado
#define ON_Board_LED 2

// Credenciales WiFi
const char* ssid = "wifi-Telecomunicaciones";
const char* password = "UNSA2023$";

// Configuración de NTP
const char* ntpServer = "pool.ntp.org";
const long gmtOffset_sec = -5 * 3600;  // UTC-5 para Perú
const int daylightOffset_sec = 0;     // Sin horario de verano

// Variables para enviar datos
String postData = ""; 
String payload = "";  

// Datos del sensor DHT11
float send_Temp;
int send_Humd;
String send_Status_Read_DHT11 = "";

// ID del dispositivo (numérico)
int device_id = 1;

// Subrutina para obtener fecha y hora en formato "YYYY-MM-DD HH:MM:SS"
String getFormattedDateTime() {
  struct tm timeinfo;
  if (!getLocalTime(&timeinfo)) {
    Serial.println("Failed to obtain time");
    return "1970-01-01 00:00:00";
  }
  char buffer[20];
  strftime(buffer, sizeof(buffer), "%Y-%m-%d %H:%M:%S", &timeinfo);
  return String(buffer);
}

// Subrutina para leer datos del sensor DHT11
void get_DHT11_sensor_data() {
  Serial.println("-------------get_DHT11_sensor_data()");
  send_Temp = dht11_sensor.readTemperature();
  send_Humd = dht11_sensor.readHumidity();

  if (isnan(send_Temp) || isnan(send_Humd)) {
    send_Temp = 0.00;
    send_Humd = 0;
    send_Status_Read_DHT11 = "FAILED";
  } else {
    send_Status_Read_DHT11 = "SUCCEED";
  }

  Serial.printf("Temperature : %.2f °C\n", send_Temp);
  Serial.printf("Humidity : %d %%\n", send_Humd);
  Serial.printf("Status Read DHT11 Sensor : %s\n", send_Status_Read_DHT11.c_str());
  Serial.println("-------------");
}

void setup() {
  Serial.begin(115200);

  pinMode(ON_Board_LED, OUTPUT);
  digitalWrite(ON_Board_LED, LOW);

  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);

  int timeout = 20 * 2;
  while (WiFi.status() != WL_CONNECTED) {
    delay(250);
    timeout--;
    if (timeout == 0) ESP.restart();
  }

  configTime(gmtOffset_sec, daylightOffset_sec, ntpServer);
  Serial.println("NTP configured");
}

void loop() {
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;

    // Leer datos del sensor
    get_DHT11_sensor_data();

    // Enviar datos a la base de datos
    String currentDateTime = getFormattedDateTime();

    postData = "id=" + String(device_id);
    postData += "&temperature=" + String(send_Temp);
    postData += "&humidity=" + String(send_Humd);
    postData += "&status_read_sensor_dht11=" + send_Status_Read_DHT11;
    postData += "&date_time=" + currentDateTime;

    http.begin("http://10.7.137.136:8080/data/datosf.php");
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");
    http.POST(postData);
    http.end();

    delay(4000);
  }
}
