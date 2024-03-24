#include <Keypad.h>
#include <ESP32Servo.h>
#include <LiquidCrystal_I2C.h>
#include <Wire.h>

const byte ROWS = 4; // จำนวนแถวของ keypad
const byte COLS = 4; // จำนวนคอลัมน์ของ keypad
char keys[ROWS][COLS] = {
  {'1','2','3','A'},
  {'4','5','6','B'},
  {'7','8','9','C'},
  {'*','0','#','D'}
};
byte rowPins[ROWS] = {12, 14, 27, 26}; // ขาของแถว keypad เชื่อมกับขา 32, 33, 34, 35 ของ ESP32
byte colPins[COLS] = {25, 33, 32, 35}; // ขาของคอลัมน์ keypad เชื่อมกับขา 36, 37, 38, 39 ของ ESP32

Keypad keypad = Keypad(makeKeymap(keys), rowPins, colPins, ROWS, COLS);
Servo myServo;

String enteredCode = ""; // เก็บรหัสที่ผู้ใช้ป้อน
const String correctCode = "3793"; // รหัสที่ถูกต้อง
const int maxAttempts = 3; // จำนวนครั้งที่ผู้ใช้ได้ใส่รหัสผิด

const int servoPin = 2; // ขาของ servo motor เชื่อมกับขา 13 ของ ESP32
const int unlockAngle = 90; // มุมที่ประตูจะเปิด
const int lockAngle = 0; // มุมที่ประตูจะปิด

const int buzzerPin = 5; // ขาของ Buzzer เชื่อมกับขา 5 ของ ESP32

LiquidCrystal_I2C lcd(0x27, 16, 2);

int attempts = 0;

void setup() {
  Serial.begin(9600);
  Wire.begin();
  lcd.init();
  lcd.backlight();
  lcd.print("Enter code:");
  myServo.attach(servoPin);
  lockDoor();
  pinMode(buzzerPin, OUTPUT);
  digitalWrite(buzzerPin, HIGH); // ปิด Buzzer
}

void loop() {
  char key = keypad.getKey();

  if (key) {
    lcd.print("*"); // แสดง * สำหรับแสดงให้ทราบว่ามีการป้อนรหัส
    if (key != '#') {
      enteredCode += key;
    } else {
      if (enteredCode == correctCode) {
        lcd.clear();
        lcd.print("Correct code");
        delay(1000);
        lcd.clear();
        lcd.print("Welcome");
        openDoor(); // เปิดประตูเมื่อรหัสถูกต้อง
        delay(2500);
        closeDoor(); // ปิดประตู
        lcd.clear();
        lcd.print("Door closed");
        attempts = 0; // Reset จำนวนครั้งที่ป้อนรหัสผิด
        digitalWrite(buzzerPin, HIGH); // หยุดการทำงานของ Buzzer เมื่อรหัสถูกต้อง
      } else {
        attempts++;
        lcd.clear();
        lcd.print("Incorrect code");
        if (attempts == maxAttempts - 1) { // ถ้ารหัสผิดครั้งที่ 4
          digitalWrite(buzzerPin, HIGH); // ปิด Buzzer
        }
        lcd.clear();
        lcd.print("Enter code:");
        if (attempts >= maxAttempts) {
          lcd.clear();
          lcd.print("Max attempts");
          delay(2000);
          digitalWrite(buzzerPin, LOW); // เปิด Buzzer
          delay(10000);
          digitalWrite(buzzerPin, HIGH); 
          lcd.clear();
          lcd.print("Try again later");
          while (true) {} // หยุดการทำงานทั้งหมด
        }
      }
      enteredCode = "";
    }
  }
}


void openDoor() {
  myServo.write(unlockAngle); // เปิดประตูโดยหมุน Servo Motor ไปที่มุม unlockAngle
}

void closeDoor() {
  myServo.write(lockAngle); // ปิดประตูโดยหมุน Servo Motor ไปที่มุม lockAngle
}

void lockDoor() {
  closeDoor(); // ป
}