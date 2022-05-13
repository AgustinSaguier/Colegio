sumatotal=0
contador=0
promedio=0
lista=[]

with open ("gaston.txt","r") as archivo, open ("gastonEditado.txt","w") as editado:
    linea=archivo.readline()
    linea=linea.strip()
    lista.append(linea)
    for linea in archivo:
        linea=linea.strip()
        lista.append(linea)
        nuevaLista=sorted(lista)
    for dato in nuevaLista:
        editado.write(dato)
        editado.write("\n")
try:
    with open ("gastonEditado.txt","r") as file, open ("resumen.txt","w") as resumen:
        linea=file.readline()
        linea=linea.strip()
        separado=linea.split(",")
        claveActual=separado[0]
        valor=int(separado[1])
        claveAnterior=claveActual
        while (linea!=""):
            if (claveActual==claveAnterior):
                sumatotal=sumatotal+valor
                contador+=1
                linea=file.readline()
                linea=linea.strip()
                if (linea==""):
                    break
                separado=linea.split(",")
                claveActual=separado[0]
                valor=int(separado[1])
            else:
                promedio=sumatotal/contador
                print ("La clave "+claveAnterior+" tiene una total de "+str(sumatotal)+", tiene un promedio de "+str(promedio)+ " y aparece una cantidad de " +str(contador) + " veces")
                resumen.write("La clave "+claveAnterior+" tiene una total de "+str(sumatotal)+", tiene un promedio de "+str(promedio)+ " y aparece una cantidad de " +str(contador) + " veces\n")
                claveAnterior=claveActual
                sumatotal=0
                contador=0
                promedio=0
        promedio=sumatotal/contador
        print ("La clave "+claveAnterior+" tiene una total de "+str(sumatotal)+", tiene un promedio de "+str(promedio)+ " y aparece una cantidad de " +str(contador) + " veces")
        resumen.write("La clave "+claveAnterior+" tiene una total de "+str(sumatotal)+", tiene un promedio de "+str(promedio)+ " y aparece una cantidad de " +str(contador) + " veces")
except IOError:
    print("ERROR")