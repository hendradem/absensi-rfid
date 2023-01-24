#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <SPI.h>
#include <RFID.h>  

#define SS_PIN D4
#define RST_PIN D3

RFID rfid(SS_PIN, RST_PIN); 

// Setup variables:
    int serNum0;
    int serNum1;
    int serNum2;
    int serNum3;
    int serNum4;


const char* ssid     = "";
const char* password = ""; 
const char* host = "";

WiFiClient client;
HTTPClient http; 
const int httpPort = 80;
String url;

unsigned long timeout; 
  
void setup() {
  Serial.begin(9600);
  delay(10);
  

  SPI.begin(); 
  rfid.init();
  
 
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}


void loop() {
  if (rfid.isCard()) {
        if (rfid.readCardSerial()) {
            if (rfid.serNum[0] != serNum0
                && rfid.serNum[1] != serNum1
                && rfid.serNum[2] != serNum2
                && rfid.serNum[3] != serNum3
                && rfid.serNum[4] != serNum4
            ) { 
                Serial.println(" ");
                Serial.println("Card found");
                serNum0 = rfid.serNum[0];
                serNum1 = rfid.serNum[1];
                serNum2 = rfid.serNum[2];
                serNum3 = rfid.serNum[3];
                serNum4 = rfid.serNum[4];
                
                Serial.println("Cardnumber:");
                Serial.print("Dec: ");
                Serial.print(rfid.serNum[0],DEC);
                Serial.print(", ");
                Serial.print(rfid.serNum[1],DEC);
                Serial.print(", ");
                Serial.print(rfid.serNum[2],DEC);
                Serial.print(", ");
                Serial.print(rfid.serNum[3],DEC);
                Serial.print(", ");
                Serial.print(rfid.serNum[4],DEC);
                Serial.println(" ");
                        
                Serial.print("Hex: ");
                Serial.print(rfid.serNum[0],HEX);
                Serial.print(", ");
                Serial.print(rfid.serNum[1],HEX);
                Serial.print(", ");
                Serial.print(rfid.serNum[2],HEX);
                Serial.print(", ");
                Serial.print(rfid.serNum[3],HEX);
                Serial.print(", ");
                Serial.print(rfid.serNum[4],HEX);
                Serial.println(" ");

                String UIDcard = String(rfid.serNum[0],HEX) +"-"+ String(rfid.serNum[1],HEX) +"-"+ String(rfid.serNum[2],HEX) +"-"+ String(rfid.serNum[3],HEX) +"-"+ String(rfid.serNum[4],HEX);
                
                HTTPClient http;    //Declare object of class HTTPClient   
                String link = "http://192.168.100.108/ci/siswa/insert_rfid?id_card=test"; 
                http.begin(link);   
                http.addHeader("Content-Type", "text/plain");
                   
                http.end();  
                delay(1000);
                
             } else { 
               Serial.print(".");
             }
          }
    }
    
    rfid.halt();
}
