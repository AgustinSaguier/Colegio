central=0
cordillera=0
value=0

with open("main.txt") as file:
    for record in file:
        record=record.strip()
        if record:
            values=record.split(",")
            claveactual=values[0]
            claveanterior=claveactual
            if claveanterior==claveactual:
                value=value+int(values[1])
                print (claveactual+" "+str(value))
                value=0
            
            
            #if values[0]=="":
            #    central=central+int(values[1])
            #elif values[0]=="":
            #    cordillera=cordillera+int(values[1])

#print("Central: "+str(central))
#print("Cordillera: "+str(cordillera))