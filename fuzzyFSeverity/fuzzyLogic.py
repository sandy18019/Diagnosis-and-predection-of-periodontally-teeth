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

    def set_tl_high_stop(self, stop):
        self.__tl_high_stop = stop

    def set_pd_low_start(self, start):
        self.__pd_low_start = start

    def set_pd_low_mid(self, mid):
        self.__pd_low_mid = mid

    def set_pd_low_stop(self, stop):
        self.__pd_low_stop = stop

    def set_pd_nor_start(self, start):
        self.__pd_nor_start = start

    def set_pd_nor_mid(self, mid):
        self.__pd_nor_mid = mid

    def set_pd_nor_stop(self, stop):
        self.__pd_nor_stop = stop

    def set_pd_high_start(self, start):
        self.__pd_high_start = start

    def set_pd_high_mid(self, mid):
        self.__pd_high_mid = mid

    def set_pd_high_stop(self, stop):
        self.__pd_high_stop = stop

    def set_o_mild_start(self, start):
        self.__o_mild_start = start

    def set_o_mild_mid(self, mid):
        self.__o_mild_mid = mid

    def set_o_mild_stop(self, stop):
        self.__o_mild_stop = stop

    def set_o_mod_start(self, start):
        self.__o_mod_start = start

    def set_o_mod_mid(self, mid):
        self.__o_mod_mid = mid

    def set_o_mod_stop(self, stop):
        self.__o_mod_stop = stop
    
    def set_o_severe_start(self, start):
        self.__o_severe_start = start

    def set_o_severe_mid(self, mid):
        self.__o_severe_mid = mid

    def set_o_severe_stop(self, stop):
        self.__o_severe_stop = stop

    def set_o_adv_start(self, start):
        self.__o_adv_start = start

    def set_o_adv_mid(self, mid):
        self.__o_adv_mid = mid

    def set_o_adv_stop(self, stop):
        self.__o_adv_stop = stop

    def set_cal_low(self, start, mid, stop):
        self.set_cal_low_start(start)
        self.set_cal_low_mid(mid)
        self.set_cal_low_stop(stop)

    def set_cal_nor(self, start, mid, stop):
        self.set_cal_nor_start(start)
        self.set_cal_nor_mid(mid)
        self.set_cal_nor_stop(stop)

    def set_cal_high(self, start, mid, stop):
        self.set_cal_high_start(start)
        self.set_cal_high_mid(mid)
        self.set_cal_high_stop(stop)

    def set_cal(self, low_start, low_mid, low_stop, nor_start, nor_mid, nor_stop, high_start, high_mid, high_stop):
        self.set_cal_low(low_start, low_mid, low_stop)
        self.set_cal_nor(nor_start, nor_mid, nor_stop)
        self.set_cal_high(high_start, high_mid, high_stop)
    
    def set_bl_low(self, start, mid, stop):
        self.set_bl_low_start(start)
        self.set_bl_low_mid(mid)
        self.set_bl_low_stop(stop)

    def set_bl_nor(self, start, mid, stop):
        self.set_bl_nor_start(start)
        self.set_bl_nor_mid(mid)
        self.set_bl_nor_stop(stop)

    def set_bl_high(self, start, mid, stop):
        self.set_bl_high_start(start)
        self.set_bl_high_mid(mid)
        self.set_bl_high_stop(stop)

    def set_bl(self, low_start, low_mid, low_stop, nor_start, nor_mid, nor_stop, high_start, high_mid, high_stop):
        self.set_bl_low(low_start, low_mid, low_stop)
        self.set_bl_nor(nor_start, nor_mid, nor_stop)
        self.set_bl_high(high_start, high_mid, high_stop)

    def set_tl_low(self, start, mid, stop):
        self.set_tl_low_start(start)
        self.set_tl_low_mid(mid)
        self.set_tl_low_stop(stop)

    def set_tl_nor(self, start, mid, stop):
        self.set_tl_nor_start(start)
        self.set_tl_nor_mid(mid)
        self.set_tl_nor_stop(stop)

    def set_tl_high(self, start, mid, stop):
        self.set_tl_high_start(start)
        self.set_tl_high_mid(mid)
        self.set_tl_high_stop(stop)

    def set_tl(self, low_start, low_mid, low_stop, nor_start, nor_mid, nor_stop, high_start, high_mid,
               high_stop):
        self.set_tl_low(low_start, low_mid, low_stop)
        self.set_tl_nor(nor_start, nor_mid, nor_stop)
        self.set_tl_high(high_start, high_mid, high_stop)
    
    def set_pd_low(self, start, mid, stop):
        self.set_pd_low_start(start)
        self.set_pd_low_mid(mid)
        self.set_pd_low_stop(stop)

    def set_pd_nor(self, start, mid, stop):
        self.set_pd_nor_start(start)
        self.set_pd_nor_mid(mid)
        self.set_pd_nor_stop(stop)

    def set_pd_high(self, start, mid, stop):
        self.set_pd_high_start(start)
        self.set_pd_high_mid(mid)
        self.set_pd_high_stop(stop)

    def set_pd(self, low_start, low_mid, low_stop, nor_start, nor_mid, nor_stop, high_start, high_mid, high_stop):
        self.set_pd_low(low_start, low_mid, low_stop)
        self.set_pd_nor(nor_start, nor_mid, nor_stop)
        self.set_pd_high(high_start, high_mid, high_stop)

    def set_o_mild(self, start, mid, stop):
        self.set_o_mild_start(start)
        self.set_o_mild_mid(mid)
        self.set_o_mild_stop(stop)

    def set_o_mod(self, start, mid, stop):
        self.set_o_mod_start(start)
        self.set_o_mod_mid(mid)
        self.set_o_mod_stop(stop)

    def set_o_severe(self, start, mid, stop):
        self.set_o_severe_start(start)
        self.set_o_severe_mid(mid)
        self.set_o_severe_stop(stop)

    def set_o_adv(self, start, mid, stop):
        self.set_o_adv_start(start)
        self.set_o_adv_mid(mid)
        self.set_o_adv_stop(stop)

    def set_o(self, mild_start, mild_mid, mild_stop, mod_start, mod_mid, mod_stop, severe_start, severe_mid, severe_stop,adv_start, adv_mid,
              adv_stop):
        self.set_o_mild(mild_start, mild_mid, mild_stop)
        self.set_o_mod(mod_start, mod_mid, mod_stop)
        self.set_o_severe(severe_start, severe_mid, severe_stop)
        self.set_o_adv(adv_start, adv_mid, adv_stop)

    def __init__(self, cal_start=0, cal_stop=10, bl_start=0, bl_stop=10, tl_start=0, tl_stop=10, pd_start=0, pd_stop=10, o_start=0, o_stop=10):
        """
        constructor that assign the start/stop values 
        and feed them to the make_variables() func.
        """
        self.__cal_start = cal_start
        self.__cal_stop = cal_stop
        self.__bl_start = bl_start
        self.__bl_stop = bl_stop
        self.__tl_start = tl_start
        self.__tl_stop = tl_stop
        self.__pd_start = pd_start
        self.__pd_stop = pd_stop
        self.__o_start = o_start
        self.__o_stop = o_stop

    def make_variables(self):
        """ engine
            step 1: create input, output variables
        :return:
        """
        self.__cal = skfuzzy.control.Antecedent(np.arange(self.__cal_start, self.__cal_stop),
                                                'CAL')  # input variable Clinical attachement loss
        self.__bl = skfuzzy.control.Antecedent(np.arange(self.__bl_start, self.__bl_stop),
                                               'BL')  # input variable bone loss
        self.__tl = skfuzzy.control.Antecedent(np.arange(self.__tl_start, self.__tl_stop),
                                                'TL')  # input variable teeth loss
        self.__pd = skfuzzy.control.Antecedent(np.arange(self.__pd_start, self.__pd_stop),
                                                'PD')  # input variable probing depth
        # self.__x = skfuzzy.control.Antecedent(np.arange(self.__x_start, self.__x_stop),
        #                                        'X')   #input variable bone loss axis(horizontal/vertical)
        self.__perio = skfuzzy.control.Consequent(np.arange(self.__o_start, self.__o_stop),
                                                    'PS')  # output variable PS = Periodontal Stage
    
    def make_member_functions(self):
        """
            step 2: create member functions
        :return:
        """
        self.__cal['low'] = fuzz.trimf(self.__cal.universe,
                                       [self.__cal_low_start, self.__cal_low_mid, self.__cal_low_stop])
        self.__cal['normal'] = fuzz.piecemf(self.__cal.universe,
                                            [self.__cal_nor_start, self.__cal_nor_mid, self.__cal_nor_stop])
        self.__cal['high'] = fuzz.trimf(self.__cal.universe,
                                        [self.__cal_high_start, self.__cal_high_mid, self.__cal_high_stop])
        self.__bl['low'] = fuzz.trimf(self.__bl.universe, [self.__bl_low_start, self.__bl_low_mid, self.__bl_low_stop])
        self.__bl['normal'] = fuzz.trimf(self.__bl.universe,
                                         [self.__bl_nor_start, self.__bl_nor_mid, self.__bl_nor_stop])
        self.__bl['high'] = fuzz.trimf(self.__bl.universe,
                                       [self.__bl_high_start, self.__bl_high_mid, self.__bl_high_stop])
        self.__tl['low'] = fuzz.trimf(self.__tl.universe,
                                        [self.__tl_low_start, self.__tl_low_mid, self.__tl_low_stop])
        self.__tl['normal'] = fuzz.trimf(self.__tl.universe,
                                         [self.__tl_nor_start, self.__tl_nor_mid, self.__tl_nor_stop])
        self.__tl['high'] = fuzz.trimf(self.__tl.universe,
                                        [self.__tl_high_start, self.__tl_high_mid, self.__tl_high_stop])
        self.__pd['low'] = fuzz.trimf(self.__pd.universe, [self.__pd_low_start, self.__pd_low_mid, self.__pd_low_stop])
        self.__pd['normal'] = fuzz.trimf(self.__pd.universe,
                                         [self.__pd_nor_start, self.__pd_nor_mid, self.__pd_nor_stop])
        self.__pd['high'] = fuzz.trimf(self.__pd.universe,
                                       [self.__pd_high_start, self.__pd_high_mid, self.__pd_high_stop])
        self.__perio['mild'] = fuzz.trimf(self.__perio.universe,
                                               [self.__o_mild_start, self.__o_mild_mid, self.__o_mild_stop])
        self.__perio['moderate'] = fuzz.trimf(self.__perio.universe,
                                                  [self.__o_mod_start, self.__o_mod_mid, self.__o_mod_stop])
        self.__perio['severe'] = fuzz.trimf(self.__perio.universe,
                                             [self.__o_severe_start, self.__o_severe_mid, self.__o_severe_stop])
        self.__perio['advanced'] = fuzz.trimf(self.__perio.universe,
                                             [self.__o_adv_start, self.__o_adv_mid, self.__o_adv_stop])
    
    def make_rules(self):
        """
            step 3: create fuzzy rules
        :return:
        """
        rule1 = skfuzzy.control.Rule(self.__cal['low'] &  # low = 0,2
                                     self.__bl['low'] &  # low = 0,14
                                     self.__tl['low'] &  # low = 0,2
                                     self.__pd['low'],  # low = 0,4
                                     self.__perio['mild'])

        rule2 = skfuzzy.control.Rule(self.__cal['low'] &
                                     self.__bl['low'] &
                                     self.__tl['low'] &
                                     self.__pd['normal'],  # normal=2,6
                                     self.__perio['moderate'])

        rule3 = skfuzzy.control.Rule(self.__cal['normal'] &  # 1,4
                                     self.__bl['normal'] &  # 10,33
                                     self.__tl['low'] &
                                     self.__pd['normal'],
                                     self.__perio['moderate'])

        rule4 = skfuzzy.control.Rule(self.__cal['normal'] &
                                     self.__bl['normal'] &
                                     self.__tl['normal'] &  # -0.5,4
                                     self.__pd['normal'],
                                     self.__perio['moderate'])

        rule5 = skfuzzy.control.Rule(self.__cal['high'] &  # 3,7
                                     self.__bl['high'] &  # 15,100
                                     self.__tl['normal'] &
                                     self.__pd['high'],
                                     self.__perio['advanced'])

        rule6 = skfuzzy.control.Rule(self.__cal['high'] &
                                     self.__bl['high'] &
                                     self.__tl['normal'] &
                                     self.__pd['normal'],
                                     self.__perio['severe'])

        # rule7 = skfuzzy.control.Rule(self.__cal['low'] &
        #                              self.__bl['low'] &
        #                              self.__tl['low']&
        #                              self.__pd['high'],
        #                              self.__perio['advanced']) ###

        rule7 = skfuzzy.control.Rule(self.__cal['low'] &
                                     self.__bl['low'] &
                                     self.__tl['normal'] &
                                     self.__pd['low'],
                                     self.__perio['severe'])

        rule8 = skfuzzy.control.Rule(self.__cal['low'] &
                                     self.__bl['low'] &
                                     self.__tl['normal'] &
                                     self.__pd['normal'],
                                     self.__perio['severe'])

        # rule10 = skfuzzy.control.Rule(self.__cal['low'] &
        #                              self.__bl['low'] &
        #                              self.__tl['high'] &
        #                              self.__pd['low'],
        #                              self.__perio['advanced'])

        # rule11 = skfuzzy.control.Rule(self.__cal['low'] &
        #                               self.__bl['low'] &
        #                               self.__tl['high']&
        #                               self.__pd['normal'],
        #                               self.__perio['severe']) #??

        # rule12 = skfuzzy.control.Rule(self.__cal['low'] &
        #                               self.__bl['low'] &
        #                               self.__tl['high']&
        #                               self.__pd['high'],
        #                               self.__perio['advanced'])

        rule9 = skfuzzy.control.Rule(self.__cal['low'] &
                                     self.__bl['normal'] &
                                     self.__tl['low'] &
                                     self.__pd['low'],
                                     self.__perio['moderate'])

        rule10 = skfuzzy.control.Rule(self.__cal['low'] &
                                      self.__bl['normal'] &
                                      self.__tl['low'] &
                                      self.__pd['normal'],
                                      self.__perio['moderate'])

        rule11 = skfuzzy.control.Rule(self.__cal['low'] &
                                      self.__bl['normal'] &
                                      self.__tl['low'] &
                                      self.__pd['high'],
                                      self.__perio['severe'])

        rule12 = skfuzzy.control.Rule(self.__cal['low'] &
                                      self.__bl['normal'] &
                                      self.__tl['normal'] &
                                      self.__pd['low'],
                                      self.__perio['moderate'])

        rule13 = skfuzzy.control.Rule(self.__cal['low'] &
                                      self.__bl['normal'] &
                                      self.__tl['normal'] &
                                      self.__pd['normal'],
                                      self.__perio['moderate'])

        rule14 = skfuzzy.control.Rule(self.__cal['low'] &
                                      self.__bl['normal'] &
                                      self.__tl['normal'] &
                                      self.__pd['high'],
                                      self.__perio['severe'])

        rule15 = skfuzzy.control.Rule(self.__cal['low'] &
                                      self.__bl['normal'] &
                                      self.__tl['high'] &
                                      self.__pd['low'],
                                      self.__perio['moderate'])
