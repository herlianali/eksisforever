<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://balkangraph.com/js/latest/OrgChart.js"></script>
    <title>Document</title>
    <style>
        html, body{
            width: 100%;
            height: 100%;
            padding: 0;
            margin:0;
            overflow: hidden;
            font-family: Helvetica;
        }
        #tree{
            width:100%;
            height:100%;
        }
    </style>
</head>
<body>
    <div id="tree"></div>
    <script>
        var chart = new OrgChart(document.getElementById("tree"), {
            enableSearch: false,
            template: "ula",
            scaleInitial: OrgChart.match.boundary,
            mouseScrool: OrgChart.action.none,
            nodeBinding: {
                field_0: "name",
                field_1: "title",
                field_2: "img"
            },
            nodes: [
                { id: 1, name: "ENRICO BAGUS T", title: "Ketua Umum", img: "https://cdn.balkan.app/shared/2.jpg"},
                { id: 2, pid: 1, tags: ['pengawas1'], name: "SUMARNO (Ketua RW 08)", title: "Pengawas 1", img: ""},
                { id: 3, pid: 1, tags: ['pembina'], name: "KEPALA DESA KEBOAN ANOM", title: "Pembina", img: ""},
                { id: 4, pid: 1, tags: ['pengawas1'], name: "AMMY YOGA PRAJATI (KETUA KARTAR DESA)", title: "Pengawas 1", img: ""},
                { id: 5, pid: 1, name: "M CHOIRUL AFIF", title: "Wakil Ketua", img: "https://cdn.balkan.app/shared/2.jpg"},
                { id: 6, pid: 1, name: "LINATA PERMATA S", title: "Sekertaris", img: "https://cdn.balkan.app/shared/2.jpg"},
                { id: 7, pid: 1, name: "MILLEN", title: "Bendahara", img: "https://cdn.balkan.app/shared/2.jpg"},
            ]
        });
    </script>
</body>
</html>