import csv

with open('districts.csv') as file_obj:    
    
	reader_obj = csv.reader(file_obj)
		
	for x in reader_obj:
		f = open(x[0] + ".txt","x")