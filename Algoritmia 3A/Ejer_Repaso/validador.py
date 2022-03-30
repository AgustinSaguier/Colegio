import os
dot=0
at=0
mail=0
contador=0
linea=0
numVal=0
numInval=0

file=open("datos.txt","r")

mail=file.readline()
contador+=1
while (mail!=""):

    for k in range (len(mail)):
        if (mail[k]=="."):
            dot=dot+1
        if (mail[k]=="@"):
            at=at+1
        
    if (dot==2 and at==1):
        numVal=numVal+1
        print(f"El mail de la linea {contador} es valido") 
    else:
        numInval=numInval+1
        print(f"El mail de la linea {contador} no es valido")
    mail=file.readline()
    contador+=1
    dot=0
    at=0
print(f"De {numVal+numInval} correos {numVal} son valido/s y {numInval} no son valido/s")

og=open("datos.txt")
new=open("copiaDatos.txt","w")
for k in og.readlines():
    new.write(k)
og.close()
new.close()


file.close()
