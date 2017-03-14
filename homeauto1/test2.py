#!/usr/bin/python

import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)

pinList = [2]


GPIO.setup(2, GPIO.OUT)
GPIO.output(2, GPIO.HIGH)

GPIO.output(2, GPIO.LOW)
time.sleep(0.5)
GPIO.output(2, GPIO.HIGH)

