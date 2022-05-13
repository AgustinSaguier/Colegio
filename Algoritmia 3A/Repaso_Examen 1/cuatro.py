contador=0
nombre=input("Ingrese el nombre ")

with open (nombre+".txt","r") as file:
    for linea in file:
        contador+=1
        print ("linea "+str(contador)+" "+linea)