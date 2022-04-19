with open("test.txt") as file:
    for record in file:
        record=record.strip()
        values=record.split(",")
        claveActual=values[0]
        if record:
            print("l")
            claveAnterior=claveActual
