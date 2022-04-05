with open("main.txt") as file:
    for record in file:
        if record:
            values=record.split(",")
            if values[0]=="Central":
                central=0+int([1])