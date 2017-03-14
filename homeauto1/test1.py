#!/usr/bin/python

import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)

pinList = [2]

for i in pinList:
	GPIO.setup(i, GPIO.OUT)
	GPIO.output(i, GPIO.HIGH)

def trigger() :
	for i in pinList:
		GPIO.output(i, GPIO.LOW)
		time.sleep(0.5)
		GPIO.output(i, GPIO.HIGH)
		GPIO.cleanup()


try:
	trigger()


except KeyboardInterrupt:
  print "  Quit"
  GPIO.cleanup()
