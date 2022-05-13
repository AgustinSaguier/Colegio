contador=0
with open ("uno.txt","r") as file:
    for linea in file:
        contador+=1
    print(contador)