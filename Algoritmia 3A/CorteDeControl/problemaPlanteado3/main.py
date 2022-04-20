contador=0
sumaTotal=0

with open("ventas.txt") as file, open ("resumen.txt","a") as resumen :
        record=file.readline()
        record=record.strip()
        values=record.split(",")
        if (values[0]=="Articulos"):
            record=file.readline()
            record=record.strip()
            values=record.split(",")
        claveActual=values[0]
        suma=int(values[1])
        claveAnterior=claveActual
        while (record!=""):
            if claveAnterior==claveActual:
                contador=contador+1
                sumaTotal=sumaTotal+suma
                record=file.readline()
                record=record.strip()
                values=record.split(",")
                claveActual=values[0]
                if (record == ""):
                    break
                suma=int(values[1])
            else:
                print("El articulo "  + claveAnterior + " fue vendido en " + str(contador) + " diferentes ocasiones con un total de " + str(sumaTotal) + " vendidos")
                resumen.write("El articulo "  + claveAnterior + " fue vendido en " + str(contador) + " diferentes ocasiones con un total de " + str(sumaTotal) + " vendidos \n")
                contador=0
                sumaTotal=0
                claveAnterior=claveActual
        print("El articulo "  + claveAnterior + " fue vendido en " + str(contador) + " diferentes ocasiones con un total de " + str(sumaTotal) + " vendidos")
        resumen.write("El articulo "  + claveAnterior + " fue vendido en " + str(contador) + " diferentes ocasiones con un total de " + str(sumaTotal) + " vendidos")
