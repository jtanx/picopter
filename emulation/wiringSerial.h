/**
 * Simple stub file to get 'wiringSerial' when not compiling on the rPi
 */
#ifndef _WIRINGSERIAL_STUB_H
#define _WIRINGSERIAL_STUB_H

#define serialOpen(a,b) 0
#define serialClose(a)
#define serialGetchar(a) 0

#endif //_WIRINGSERIAL_STUB_H