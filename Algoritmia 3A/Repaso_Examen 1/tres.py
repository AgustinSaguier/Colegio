lista=[]
with open ("tres.txt","r") as file:
    for linea in file:
        linea=linea.strip()
        lista.append(linea)
print (lista)
if ("hola" in lista):
    print ("si")
else:
    print("no")