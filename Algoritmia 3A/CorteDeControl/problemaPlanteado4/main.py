arr=[]


with open("main.txt") as file:
        record=file.readline()
        record=record.strip()
        arr.append(record)
        for record in file:
            record=record.strip()
            arr.append(record)
realArr=sorted(arr)
new=open("newMain.txt","w")
for item in realArr:
    new.write(item)
    new.write("\n")
new.close()

contador=0
sumaTotal=0
suma=0

with open("newMain.txt")as archivo ,open("resumen.txt","w") as resumen:
        linea=archivo.readline()
        linea=linea.strip()
        values=linea.split(",")
        if (values[0]=="Articulos"):
            linea=archivo.readline()
            linea=linea.strip()
            values=linea.split(",")
        claveActual=values[0]
        suma=int(values[1])
        claveAnterior=claveActual
        while (record!=""):
            if claveAnterior==claveActual:
                contador=contador+1
                sumaTotal=sumaTotal+suma
                linea=archivo.readline()
                linea=linea.strip()
                values=linea.split(",")
                claveActual=values[0]
                if (linea == ""):
                    break
                suma=int(values[1])
            else:
                print("La clave "  + claveAnterior + " aparecio " + str(contador) + " diferentes ocasiones con una suma total de " + str(sumaTotal))
                resumen.write("La clave "  + claveAnterior + " aparecio " + str(contador) + " diferentes ocasiones con una suma total de " + str(sumaTotal)+"\n")
                contador=0
                sumaTotal=0
                claveAnterior=claveActual
        print("La clave "  + claveAnterior + " aparecio " + str(contador) + " diferentes ocasiones con una suma total de " + str(sumaTotal))
        resumen.write("La clave "  + claveAnterior + " aparecio " + str(contador) + " diferentes ocasiones con una suma total de " + str(sumaTotal))

print(realArr)