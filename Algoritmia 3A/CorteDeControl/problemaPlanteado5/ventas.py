

contador=0
sumaTotal=0
promedio=0
with open("ventas.txt") as file, open("resumenVentas.txt","w") as resumen:
    resumen.write("Vendedor" + "\t\t" + "Total" + "\t\t" + "Promedio"+"\n")
    line=file.readline()
    line=line.strip()
    splitLine=line.split(",")
    claveActual=splitLine[0]
    suma=int(splitLine[1])
    claveAnterior=claveActual
    while (line!=""):
        if (claveActual==claveAnterior):
            contador+=1
            sumaTotal=sumaTotal+suma
            line=file.readline()
            line=line.strip()
            splitLine=line.split(",")
            if (line==""):
                break
            suma=int(splitLine[1])
            claveActual=splitLine[0]
        else:
            promedio=sumaTotal/contador
            print(claveAnterior + " ha vendido una total de " + str(sumaTotal) + " con un promedio de " + str(promedio))
            resumen.write(claveAnterior+ "\t\t" + str(sumaTotal) + "\t\t" + str(promedio) +"\n")
            claveAnterior=claveActual
            contador=0
    promedio=sumaTotal/contador
    print(claveAnterior + " ha vendido una total de " + str(sumaTotal) + " con un promedio de " + str(promedio))
    resumen.write(claveAnterior+ "\t\t" + str(sumaTotal) + "\t\t" + str(promedio) +"\n")
    
    
