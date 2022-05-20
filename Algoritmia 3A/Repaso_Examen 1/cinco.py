listaGanadora=""
highestSum=0
totalSum=0
with open ("cinco.txt","r") as file:
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
            print("La lista " + claveAnterior + " tiene " + str(totalSum) + " votos")
            if totalSum>highestSum:
                highestSum=totalSum
                listaGanadora="La lista ganadora es " + claveAnterior + " con " + str (highestSum) + " votos"
            totalSum=0
            claveAnterior=claveActual
print("La lista " + claveAnterior + " tiene " + str(totalSum) + " votos")
print(listaGanadora)