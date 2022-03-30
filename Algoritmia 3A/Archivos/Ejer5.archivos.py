import os
pab=0
pce=0
formla=0
contador=0
linea=0

file=open("matUno.txt","r")

formla=file.readline()
contador+=1
while (formla!=""):

    for k in range (len(formla)):
        if (formla[k]=="("):
            pab=pab+1
        if (formla[k]==")"):
            pce=pce+1
        
    if (pab==pce):
        print(f"La ecuacion en la linea {contador} esta correcta")
    else:
        print(f"La ecuacion en la linea {contador} no esta correcta")
    formla=file.readline()
    contador+=1
    pab=0
    pce=0

file.close()

