
contador=0
sumaTotal=0
promedio=0
lista=[]
with open("gaston.txt","r") as archivo, open("gastonNew.txt","w") as new:
    line=archivo.readline()
    line=line.strip()
    lista.append(line)
    for line in archivo:
        line=line.strip()
        lista.append(line)
    print (lista)
    sortedLista=sorted(lista)
    print(sortedLista)
    for item in sortedLista:
        new.write(item+"\n")
        
    
try:
    with open ("gastonNew.txt","r") as file, open ("resumen.txt","w") as resumen:
        linea=file.readline()
        linea=linea.strip()
        lineaSpliteada=linea.split(",")
        claveActual=lineaSpliteada[0]
        suma=int(lineaSpliteada[1])
        claveAnterior=claveActual
        while (linea!=""):
            if (claveActual==claveAnterior):
                sumaTotal=sumaTotal+suma
                contador+=1
                linea=file.readline()
                linea=linea.strip()
                if (linea==""):
                    break
                lineaSpliteada=linea.split(",")
                claveActual=lineaSpliteada[0]
                suma=int(lineaSpliteada[1])
            else:
                promedio=sumaTotal/contador
                print("La clave " + claveAnterior + " tiene una suma total de " + str(sumaTotal) +", tiene un promedio de "+ str(promedio) + " y aparece una cantidad de " + str(contador) + " veces")
                resumen.write("La clave " + claveAnterior + " tiene una suma total de " + str(sumaTotal) +", tiene un promedio de "+ str(promedio) + " y aparece una cantidad de " + str(contador) + " veces\n")
                claveAnterior=claveActual
                sumaTotal=0
                contador=0
                promedio=0
        promedio=sumaTotal/contador
        print("La clave " + claveAnterior + " tiene una suma total de " + str(sumaTotal) +", tiene un promedio de "+ str(promedio) + " y aparece una cantidad de " + str(contador) + " veces")
        resumen.write("La clave " + claveAnterior + " tiene una suma total de " + str(sumaTotal) +", tiene un promedio de "+ str(promedio) + " y aparece una cantidad de " + str(contador) + " veces")
except IOError:
    print("ERROR")