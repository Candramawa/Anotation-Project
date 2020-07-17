import json

#Lokasi File Yang Akan Direkap
json_file = open('Hasil Rekap\Berita dan Politik-Kepastian di Antara Ketidakpastian  Catatan Najwa.json', 'r', encoding='utf-8')
data1 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Berita dan Politik-Mengenal Miangas, Pulau Indonesia yang Lebih Dekat ke Filipina.json', 'r', encoding='utf-8')
data2 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Berita dan Politik-Viral Video Polisi Kejar dan Tembaki Dua Begal Bermotor di Jalan Raya Bekasi.json', 'r', encoding='utf-8')
data3 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Education-Apa Itu Ilmu Kimia Sebenarnya.json', 'r', encoding='utf-8')
data4 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Education-Fungsi Pendidikan Selain Supaya Bisa Nyari Uang.json', 'r', encoding='utf-8')
data5 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Education-Masalah Pendidikan Indonesia.json', 'r', encoding='utf-8')
data6 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Film dan Animasi-JanjiTheSeries - episode 01.json', 'r', encoding='utf-8')
data7 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Film dan Animasi-Official Trailer GUNDALA 2019 - Tayang 29 Agustus 2019.json', 'r', encoding='utf-8')
data8 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Film dan Animasi-Review Kim Ji-young Born 1982, Salah Satu Film Paling Penting di 2019.json', 'r', encoding='utf-8')
data9 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Gaming-INI GAME SERU JUGA TERNYATA!! - ANIMAL CROSSING.json', 'r', encoding='utf-8')
data10 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Gaming-Masuk Kuliah! - The Sims 4 University (Indonesia) #1.json', 'r', encoding='utf-8')
data11 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Gaming-Raffi Ahmad Main FIFA Tantang Raja Esport.json', 'r', encoding='utf-8')
data12 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Hiburan-MASTERCHEF INDONESIA - Chef Arnold Minta Eric Fokus FINAL.json', 'r', encoding='utf-8')
data13 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Hiburan-Totalitas Desta Bikin Enzy Nggak Berhenti Ngakak.json', 'r', encoding='utf-8')
data14 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Hiburan-Warteg Favorit.json', 'r', encoding='utf-8')
data15 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Lifestyle-Inilah Waktu Yang Tepat Untuk Olahraga, Olahraga Pagi, Sore atau Malam.json', 'r', encoding='utf-8')
data16 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Lifestyle-Ternyata Ini Cara Menambah Berat Badan.json', 'r', encoding='utf-8')
data17 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Lifestyle-Yuk Lakukan Senam Aerobik Hanya 15 Menit Untuk Membakar Lemak Tubuh !.json', 'r', encoding='utf-8')
data18 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Musik-FIERSA BESARI - Bukan Lagu Valentine.json', 'r', encoding='utf-8')
data19 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Musik-Fourtwnty - Zona Nyaman.json', 'r', encoding='utf-8')
data20 = json.load(json_file)
json_file.close()

json_file = open('Hasil Rekap\Musik-SABYAN - AISYAH ISTRI RASULULLAH COVER.json', 'r', encoding='utf-8')
data21 = json.load(json_file)
json_file.close()

#Deklarasi Variabel
total_in = 0;
total_out = 0;
total_pos = 0;
total_neg = 0;
total_net = 0;
total_all = 0;
in_per = 0;

#Rekapitulasi data dari masing-masing file
total_in = data1['total']['context']['dalam']+data2['total']['context']['dalam']+data3['total']['context']['dalam']+data4['total']['context']['dalam']+data5['total']['context']['dalam']+data6['total']['context']['dalam']+data7['total']['context']['dalam']+data8['total']['context']['dalam']+data9['total']['context']['dalam']+data10['total']['context']['dalam']+data11['total']['context']['dalam']+data12['total']['context']['dalam']+data13['total']['context']['dalam']+data14['total']['context']['dalam']+data15['total']['context']['dalam']+data16['total']['context']['dalam']+data17['total']['context']['dalam']+data18['total']['context']['dalam']+data19['total']['context']['dalam']+data20['total']['context']['dalam']+data21['total']['context']['dalam']
total_out = data1['total']['context']['luar']+data2['total']['context']['luar']+data3['total']['context']['luar']+data4['total']['context']['luar']+data5['total']['context']['luar']+data6['total']['context']['luar']+data7['total']['context']['luar']+data8['total']['context']['luar']+data9['total']['context']['luar']+data10['total']['context']['luar']+data11['total']['context']['luar']+data12['total']['context']['luar']+data13['total']['context']['luar']+data14['total']['context']['luar']+data15['total']['context']['luar']+data16['total']['context']['luar']+data17['total']['context']['luar']+data18['total']['context']['luar']+data19['total']['context']['luar']+data20['total']['context']['luar']+data21['total']['context']['luar']
total_pos = data1['total']['sentiment']['positif']+data2['total']['sentiment']['positif']+data3['total']['sentiment']['positif']+data4['total']['sentiment']['positif']+data5['total']['sentiment']['positif']+data6['total']['sentiment']['positif']+data7['total']['sentiment']['positif']+data8['total']['sentiment']['positif']+data9['total']['sentiment']['positif']+data10['total']['sentiment']['positif']+data11['total']['sentiment']['positif']+data12['total']['sentiment']['positif']+data13['total']['sentiment']['positif']+data14['total']['sentiment']['positif']+data15['total']['sentiment']['positif']+data16['total']['sentiment']['positif']+data17['total']['sentiment']['positif']+data18['total']['sentiment']['positif']+data19['total']['sentiment']['positif']+data20['total']['sentiment']['positif']+data21['total']['sentiment']['positif']
total_neg = data1['total']['sentiment']['negatif']+data2['total']['sentiment']['negatif']+data3['total']['sentiment']['negatif']+data4['total']['sentiment']['negatif']+data5['total']['sentiment']['negatif']+data6['total']['sentiment']['negatif']+data7['total']['sentiment']['negatif']+data8['total']['sentiment']['negatif']+data9['total']['sentiment']['negatif']+data10['total']['sentiment']['negatif']+data11['total']['sentiment']['negatif']+data12['total']['sentiment']['negatif']+data13['total']['sentiment']['negatif']+data14['total']['sentiment']['negatif']+data15['total']['sentiment']['negatif']+data16['total']['sentiment']['negatif']+data17['total']['sentiment']['negatif']+data18['total']['sentiment']['negatif']+data19['total']['sentiment']['negatif']+data20['total']['sentiment']['negatif']+data21['total']['sentiment']['negatif']
total_net = data1['total']['sentiment']['netral']+data2['total']['sentiment']['netral']+data3['total']['sentiment']['netral']+data4['total']['sentiment']['netral']+data5['total']['sentiment']['netral']+data6['total']['sentiment']['netral']+data7['total']['sentiment']['netral']+data8['total']['sentiment']['netral']+data9['total']['sentiment']['netral']+data10['total']['sentiment']['netral']+data11['total']['sentiment']['netral']+data12['total']['sentiment']['netral']+data13['total']['sentiment']['netral']+data14['total']['sentiment']['netral']+data15['total']['sentiment']['netral']+data16['total']['sentiment']['netral']+data17['total']['sentiment']['netral']+data18['total']['sentiment']['netral']+data19['total']['sentiment']['netral']+data20['total']['sentiment']['netral']+data21['total']['sentiment']['netral']
total_all = total_in+total_out

in_per = round(((total_in/total_all)*100),2)
out_per = round(((total_out/total_all)*100),2)
pos_per = round(((total_pos/(total_pos+total_neg+total_net))*100),2)
neg_per = round(((total_neg/(total_pos+total_neg+total_net))*100),2)
net_per = round(((total_net/(total_pos+total_neg+total_net))*100),2)

#Menyimpan hasil rekap dalam bentuk dictionary ke dalam file json
with open('Hasil Rekap\Total_Rekap_Seluruh.json', mode='w', encoding='utf-8') as json_file2:
    total = {}
    hasil = {}
    hasil2 = {}
    all_rec = {}
    temp = {}
    hasil['dalam'] = total_in
    hasil['luar'] = total_out
    hasil['positif'] = total_pos
    hasil['netral'] = total_net
    hasil['negatif'] = total_neg
    hasil['total'] = total_all
    total['total_all'] = hasil
    hasil2['dalam'] = str(in_per) + "%"
    hasil2['luar'] = str(out_per) + "%"
    hasil2['positif'] = str(pos_per) + "%"
    hasil2['netral'] = str(net_per) + "%"
    hasil2['negatif'] = str(neg_per) + "%"
    total['percentage_all'] = hasil2
    all_rec['all_recap'] = total 
    
    json.dump(all_rec, json_file2, indent = 4)
    
print("#9 data error (sentiment)")
