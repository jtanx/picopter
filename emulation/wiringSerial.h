/**
 * Simple stub file to get 'wiringSerial' when not compiling on the rPi
 */
#ifndef _WIRINGSERIAL_STUB_H
#define _WIRINGSERIAL_STUB_H

#define serialOpen(a,b) 0
#define serialClose(a)
static char serialGetchar(int fd) {
    const char *t = "$GPGGA,123519,3157.132,S,11551.534,W,1,08,0.9,545.4,M,46.9,M,,*47";
    static int p = 0;
    if (!t[p]) {
        p = 0;
        return '\n';
    }
    return t[p++];
}

#endif //_WIRINGSERIAL_STUB_H