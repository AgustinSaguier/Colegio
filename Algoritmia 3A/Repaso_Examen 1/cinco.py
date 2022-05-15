list=[]
totalSum=0
with open ("cinco.txt","r") as file, open ("cincoResultado.txt","w") as result:
    line=file.readline()
    line=line.strip()
    lineSplit=line.split(",")
    claveActual=lineSplit[0]
    sum=int(lineSplit[1])
    claveAnterior=claveActual
    while (line!=""):
        if (claveAnterior==claveActual):
            totalSum=totalSum+sum
            line=file.readline()
            line=line.strip()
            if (line == ""):
                break
            lineSplit=line.split(",")
            claveActual=lineSplit[0]
            sum=int(lineSplit[1])
        else:
            list.append([claveAnterior,totalSum])
            result.write(claveAnterior+","+str(totalSum)+"\n")
            print("Lista: " + claveAnterior + " Votos: " + str(totalSum))
            claveAnterior=claveActual
            totalSum=0
    result.write(claveAnterior+","+str(totalSum))
    print("Lista: " + claveAnterior + " Votos: " + str(totalSum))
    list.append([claveAnterior,totalSum])
sortedList=sorted(list, key = lambda x: x[1])
listaGanadora=(sortedList[-1])
nombreListaGanadora=listaGanadora[0]
votosListaGanadora=listaGanadora[1]
print ("La lista ganadora es " + nombreListaGanadora + " con una cantidad de " + str(votosListaGanadora) + " votos")