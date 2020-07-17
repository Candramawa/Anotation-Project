import json

#Lokasi File Yang Akan Direkap
json_file = open('Hasil Labeling\Musik-SABYAN - AISYAH ISTRI RASULULLAH COVER.json', 'r', encoding='utf-8')
data = json.load(json_file)
json_file.close()

#Deklarasi variabel
pos = 0
net = 0
neg = 0
out_con = 0
in_con = 0
tot = 0
err = 0
in_per = 0;
out_per = 0;
pos_per = 0;
neg_per = 0;
net_per = 0;

#Looping untuk pengecekan dan melakukan rekap
for row in data:
    try:
        tot+=1
        title = row['data']['title']
        if (row['completions'][0]['result'][0]['value']['choices'][0]) == "Dalam Konteks" :
            in_con=in_con+1
        else:
            out_con=out_con+1
        if (row['completions'][0]['result'][1]['value']['choices'][0]) == "Positif" :
            pos=pos+1
        elif (row['completions'][0]['result'][1]['value']['choices'][0]) == "Negatif" :
            neg=neg+1
        else:
            net=net+1
    except (IndexError):
        err=err+1

in_per = round(((in_con/tot)*100),2)
out_per = round(((out_con/tot)*100),2)
pos_per = round(((pos/(pos+neg+net))*100),2)
neg_per = round(((neg/(pos+neg+net))*100),2)
net_per = round(((net/(pos+neg+net))*100),2)

#Menyimpan hasil rekap dalam bentuk dictionary ke dalam file json
with open('Hasil Rekap\hasil_rekap.json', mode='w', encoding='utf-8') as json_file2:
    recap = {}
    context = {}
    sentiment = {}
    data = {}
    percentage = {}
    recap['judul'] = title
    context['dalam'] = in_con
    context['luar'] = out_con
    sentiment['positif'] = pos
    sentiment['netral'] = net
    sentiment['negatif'] = neg
    recap['context'] = context
    recap['sentiment'] = sentiment
    recap['total'] = tot
    percentage['dalam'] = str(in_per) + "%"
    percentage['luar'] = str(out_per) + "%"
    percentage['positif'] = str(pos_per) + "%"
    percentage['netral'] = str(net_per) + "%"
    percentage['negatif'] = str(neg_per) + "%"
    data['total'] = recap
    data['percentage'] = percentage
    json.dump(data, json_file2, indent = 4)

print("Terdapat "+str(err)+" buah data yang error (sentiment).")
