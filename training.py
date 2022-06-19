from keras.models import load_model, Sequential
import matplotlib.pyplot as plt
from keras_preprocessing.image import load_img, img_to_array 
import numpy as np
import pandas as pd
import os

def training_CNN():

  labels = ['1000','2000','5000','10000','20000','50000','100000','200000','500000']
  model_pre = load_model('money.h5')
  img=load_img('/home/ktonon/Downloads/200k.jpg',target_size=(40,80))
  plt.imshow(img)
  img=img_to_array(img)
  img=img.reshape(1,40,80,3)
  img=img.astype('float32')
  img=img/255
  img.shape
  arr = np.argmax(model_pre.predict(img),axis=1)
  # hinhnao = labels[index]
  index = arr.tolist()
  out = labels[index[0]]
  return out
print(training_CNN())