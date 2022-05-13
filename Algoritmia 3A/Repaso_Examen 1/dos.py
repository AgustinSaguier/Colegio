contador=0
with open ("dos.txt","r") as file:
    for linea in file:
        for letra in linea:
            contador+=1
    print (contador)

