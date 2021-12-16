import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class DetailSitus extends StatefulWidget {
  List list;
  int index;

  DetailSitus({required this.index, required this.list});
  @override
  _DetailSitusState createState() => new _DetailSitusState();
}

class _DetailSitusState extends State<DetailSitus> {
  void editData() {
    var url = "https://projex.id/api/edit-project";
    var response = http.post(Uri.parse(url), body: {
      "id": widget.list[widget.index]['id'].toString(),
    }).then((response) {
      if (response.statusCode == 200) {
        return true;
      } else {
        return false;
      }
    });
  }

  @override
  Widget build(BuildContext context) {
    return new Scaffold(
      appBar:
          new AppBar(title: new Text("${widget.list[widget.index]['nama']}")),
      body: new Container(
        height: 400.0,
        padding: const EdgeInsets.all(30.0),
        child: new Card(
          child: new Center(
            child: new Column(
              children: <Widget>[
                Align(alignment: Alignment.topLeft),
                new Padding(
                  padding: const EdgeInsets.only(top: 30.0),
                ),
                new Text(
                  widget.list[widget.index]['nama'],
                  style: new TextStyle(fontSize: 20.0),
                ),
                new Text(
                  "No Telphone : ${widget.list[widget.index]['no_telp']}",
                  style: new TextStyle(fontSize: 18.0),
                ),
                new Text(
                  "Nama Project : ${widget.list[widget.index]['nama_project']}",
                  style: new TextStyle(fontSize: 18.0),
                ),
                new Text(
                  "Tim : ${widget.list[widget.index]['tim']}",
                  style: new TextStyle(fontSize: 18.0),
                ),
                new Text(
                  "Start : ${widget.list[widget.index]['start']}",
                  style: new TextStyle(fontSize: 18.0),
                ),
                new Text(
                  "Deadline : ${widget.list[widget.index]['deadline']}",
                  style: new TextStyle(fontSize: 18.0),
                ),
                new Text(
                  "Progress : ${widget.list[widget.index]['progress']}",
                  style: new TextStyle(fontSize: 18.0),
                ),
                new Padding(
                  padding: const EdgeInsets.only(top: 50.0),
                ),
              ],
            ),
          ),
        ),
      ),
    );
  }
}
