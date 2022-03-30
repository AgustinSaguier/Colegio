
import os
pab=0
pce=0
formla=0

file=open("matUno.txt","r")
formla=file.readline()
for k in range (len(formla)):
    if (formla[k]=="("):
        pab=pab+1
    if (formla[k]==")"):
        pce=pce+1
if (pab==pce):
    print("La ecuacion esta correcta")
else:
    print("La ecuacion no esta correcta")
file.close()
