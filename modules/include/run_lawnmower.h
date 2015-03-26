//Author:	Omid Targhagh 	20750454@student.uwa.edu.au
//Date:		18-9-2014
//
//Desciption:	Header file for Lawmower Module

#ifndef __RUN_LAWNMOWER_INCLUDED__
#define __RUN_LAWNMOWER_INCLUDED__

#include "buzzer.h"

typedef struct{		//These are in degrees now.
	double lat;
	double lon;
} Pos;

void run_lawnmower(FlightBoard &, GPS &, IMU &, Buzzer &, Pos, Pos);

extern bool usingWindows;

#endif
