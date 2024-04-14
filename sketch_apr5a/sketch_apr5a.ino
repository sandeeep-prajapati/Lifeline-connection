#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>

const char* ssid = "<wifi Name >";
const char* password = "< wifi Password >";
const String contact1 = "< Father contact no >";
const String contact2 = "< Father Contact no >";
const String bed = "< Bed Number >";
String serverName;

unsigned long lastTime = 0;
unsigned long timerDelay = 20000;

void setup() {
  Serial.begin(115200);

  WiFi.begin(ssid, password);
  Serial.println("Connecting");
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());

  // Initialize serverName here
  serverName = "<your hosted domain name with http://  and end point is '/helpme'" + String("?contact1=") + contact1 + String("&contact2=") + contact2 +  String("&bed=") + bed;

  Serial.println("Timer set to 20 seconds (timerDelay variable), it will take 5 seconds before publishing the first reading.");
}

void loop() {
  if ((millis() - lastTime) > timerDelay) {
    if(WiFi.status() == WL_CONNECTED){
      WiFiClient client;
      HTTPClient http;

      String serverPath = serverName;
      http.begin(client, serverPath.c_str());

      int httpResponseCode = http.GET();
      
      if (httpResponseCode > 0) {
        Serial.print("HTTP Response code: ");
        Serial.println(httpResponseCode);
        String payload = http.getString();
        Serial.println(payload);
      }
      else {
        Serial.print("Error code: ");
        Serial.println(httpResponseCode);
      }
      http.end();
    }
    else {
      Serial.println("WiFi Disconnected");
    }
    lastTime = millis();
  }
}
