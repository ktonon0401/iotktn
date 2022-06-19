from keras.models import load_model, Sequential
import matplotlib.pyplot as plt
from keras_preprocessing.image import load_img, img_to_array 
import numpy as np
import pandas as pd
import os

dir_path = 'Data_VNbanknotes'
path_img = []

listdir = os.listdir(dir_path)
for i in range(len(listdir)):
  listdir[i] = int(listdir[i])
listdir.sort()
for k in range(len(listdir)):
  listdir[k] = str(listdir[k])

labels = listdir

model_pre = load_model('money.h5')


img=load_img('/home/ktonon/Downloads/20k.jpg',target_size=(40,80))
plt.imshow(img)
img=img_to_array(img)
img=img.reshape(1,40,80,3)
img=img.astype('float32')
img=img/255
img.shape

arr = np.argmax(model_pre.predict(img),axis=1)
# hinhnao = labels[index]
index = arr.tolist()
print("Predict:",labels[index[0]],"VND")