/**
 * Simple stub file to get 'RaspiCamCV' when not compiling on the rPi
 */
#ifndef _RASPICAMCV_STUB_H
#define _RASPICAMCV_STUB_H

typedef void RaspiCamCvCapture;

#define raspiCamCvCreateCameraCapture(v) NULL
#define raspiCamCvReleaseCapture(v)
#define raspiCamCvQueryFrame(v) NULL



#endif //_RASPICAMCV_STUB_H