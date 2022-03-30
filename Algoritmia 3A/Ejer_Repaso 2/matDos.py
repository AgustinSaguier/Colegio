import os
tag=0
igual="="
ecuacion=0
linea=0
#Crear archivo con solo las ecuaciones
archivo=open("matDos.txt","r")
narchivo=open("matDosNew.txt","w")
for line in archivo:
    if line.startswith("E"):
        continue
    narchivo.write(line)
archivo.close()
narchivo.close()

#Crear un tercer archivo para agregar signo = al final de cada ecuacion
if (os.path.exists ("matDosNew.txt")):
    error=open ("matDosNew.txt","r")
    corregido=open("matDosNewer.txt","w")
    for tag in error:
        new=tag.rstrip()
        new=new+igual
        corregido.write (new)
        corregido.write ("\n")
error.close()
corregido.close()

#Crear cuarto archivo con la solucion de cada ecuacion
with open('matDosNewer.txt') as fp:
    qs = fp.readlines()
answers = [eval(q.split('=')[0]) for q in qs if q.strip()]
with open('matDosAnswer.txt', 'w') as fp:
    for q, a in zip(qs, answers):
        fp.write(q.strip() + str(a) + '\n')