import pyrebase
import serial
import pynmea2

firebaseConfig={
    "apiKey": "AIzaSyBLqAJc1Co-qUTUwn_iGWaq0tbKhOsqcyA",
    "authDomain": "idas-408419.firebaseapp.com",
    "storageBucket": "idas-408419.appspot.com",
    "messagingSenderId": "1070690573529",
    "appId": "1:1070690573529:web:179693086559a8d37c72c8",
    "measurementId": "G-BM5TM7LY16",
    "databaseURL": "https://idas-408419-default-rtdb.firebaseio.com/"
    
    }

firebase=pyrebase.initialize_app(firebaseConfig)
db=firebase.database()

while True:
        port="/dev/ttyAMA0"
        ser=serial.Serial(port, baudrate=9600, timeout=0.5)
        dataout = pynmea2.NMEAStreamReader()
        newdata=ser.readline()
        n_data = newdata.decode('latin-1')
        if n_data[0:6] == '$GPRMC':
                newmsg=pynmea2.parse(n_data)
                lat=newmsg.latitude
                lng=newmsg.longitude
                gps = "Latitude=" + str(lat) + " and Longitude=" + str(lng)
                print(gps)
                data = {"LAT": lat, "LNG": lng}
                db.update(data)
                print("Data sent")