CC = g++

CFLAGS = -Wall -c -g
INCLUDES = -I./include -I/usr/local/include -I../emulation
LDFLAGS = -L/usr/local/lib -lwiringPi -lboost_thread -lpthread -lboost_system -lncurses -g

BASE_INCLUDE = -I../base/include
BASE_HEADERS = $(wildcard ../base/include/*.h)
BASE_OBJECTS = $(wildcard ../base/obj/*.o)

STATE_INCLUDE = -I../www-waypoints/include

XSENS_DIR = ../third_party/Xsens
XSENS_LINKS = -L$(XSENS_DIR) -lcmt -lpthread -lrt
XSENS_INCLUDES = -I$(XSENS_DIR)
XSENS_OBJECTS = $(addprefix $(XSENS_DIR)/, cmt1.o cmt2.o cmt3.o cmtmessage.o cmtpacket.o cmtscan.o xsens_std.o xsens_time.o xsens_exception.o)

RASPICAM_DIR = ../../lib/robidouille/raspicam_cv
USERLAND_DIR = ../../lib/userland
RASPICAM_LINKS = -L$(RASPICAM_DIR) -L$(USERLAND_DIR)/build/lib -lraspicamcv -lmmal_core -lmmal -lmmal_util -lvcos -lbcm_host
RASPICAM_INCLUDES = -I$(RASPICAM_DIR)
OPEN_CV = `pkg-config --cflags --libs opencv`

OBJECTS = $(patsubst src/%.cpp, obj/%.o, $(wildcard src/*.cpp))

# MinGW
uname_S := $(shell sh -c 'uname -s 2>/dev/null || echo not')
ifneq (,$(findstring MINGW,$(uname_S)))
	INCLUDES += -I/mingw32/include -I/mingw32/include/ncurses
	LDFLAGS = -L/mingw32/lib -L/usr/local/lib -lpthread -lncurses -lboost_thread-mt -lboost_system-mt  -g
	XSENS_LINKS = -L$(XSENS_DIR) -lcmt -lpthread -lsetupapi
	RASPICAM_LINKS = 
endif

all: $(OBJECTS)

obj/%.o :  src/%.cpp include/%.h $(BASE_HEADERS)
	$(CC) $(CFLAGS) $(INCLUDES) $(BASE_INCLUDE) $(STATE_INCLUDE) $(XSENS_INCLUDES) $(RASPICAM_INCLUDES) $(OPEN_CV) $< -o $@


clean:
	rm -f obj/*.o 
