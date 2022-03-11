import numpy as np
import skfuzzy as fuzz
import skfuzzy.control
from skfuzzy import *


class FuzzyLogic:


    def set_cal_low_start(self, start):
        self.__cal_low_start = start

    def set_cal_low_mid(self, mid):
        self.__cal_low_mid = mid

    def set_cal_low_stop(self, stop):
        self.__cal_low_stop = stop

    def set_cal_nor_start(self, start):
        self.__cal_nor_start = start

    def set_cal_nor_mid(self, mid):
        self.__cal_nor_mid = mid

    def set_cal_nor_stop(self, stop):
        self.__cal_nor_stop = stop

    def set_cal_high_start(self, start):
        self.__cal_high_start = start

    def set_cal_high_mid(self, mid):
        self.__cal_high_mid = mid

    def set_cal_high_stop(self, stop):
        self.__cal_high_stop = stop

    def set_bl_low_start(self, start):
        self.__bl_low_start = start

    def set_bl_low_mid(self, mid):
        self.__bl_low_mid = mid

    def set_bl_low_stop(self, stop):
        self.__bl_low_stop = stop

    def set_bl_nor_start(self, start):
        self.__bl_nor_start = start

    def set_bl_nor_mid(self, mid):
        self.__bl_nor_mid = mid

    def set_bl_nor_stop(self, stop):
        self.__bl_nor_stop = stop

    def set_bl_high_start(self, start):
        self.__bl_high_start = start

    def set_bl_high_mid(self, mid):
        self.__bl_high_mid = mid

    def set_bl_high_stop(self, stop):
        self.__bl_high_stop = stop

    def set_tl_low_start(self, start):
        self.__tl_low_start = start

    def set_tl_low_mid(self, mid):
        self.__tl_low_mid = mid

    def set_tl_low_stop(self, stop):
        self.__tl_low_stop = stop

    def set_tl_nor_start(self, start):
        self.__tl_nor_start = start

    def set_tl_nor_mid(self, mid):
        self.__tl_nor_mid = mid

    def set_tl_nor_stop(self, stop):
        self.__tl_nor_stop = stop

    def set_tl_high_start(self, start):
        self.__tl_high_start = start

    def set_tl_high_mid(self, mid):
        self.__tl_high_mid = mid
