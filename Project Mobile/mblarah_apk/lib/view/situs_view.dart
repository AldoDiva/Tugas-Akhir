import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';

import 'package:mblarah_apk/details/detail_situs.dart';

class SitusViewPage extends StatefulWidget {
  _SitusState createState() => new _SitusState();
  SitusViewPage({
    Key? key,
  }) : super(key: key);
}

class _SitusState extends State<SitusViewPage> {
  Future<List> getData() async {
    final response =
        await http.get(Uri.parse("https://projex.id/api/projects"));
    var data = json.decode(response.body);
    print(data);
    return data['projects'];
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: new Container(
        width: double.infinity,
        height: double.infinity,
        decoration: BoxDecoration(
          image: DecorationImage(
            image: AssetImage("assets/images/situs.jpg"),
            fit: BoxFit.cover,
          ),
        ),
        child: new FutureBuilder<List>(
          future: getData(),
          builder: (context, snapshot) {
            if (snapshot.hasError) print(snapshot.error);

            return snapshot.hasData
                ? new ItemList(
                    list: snapshot.data ?? [],
                  )
                : new Center(
                    child: new CircularProgressIndicator(),
                  );
          },
        ),
      ),
    );
  }
}

class ItemList extends StatelessWidget {
  final List list;
  ItemList({required this.list});

  @override
  Widget build(BuildContext context) {
    return new ListView.builder(
      itemCount: list == null ? 0 : list.length,
      itemBuilder: (context, i) {
        return new Container(
          padding: const EdgeInsets.all(10.0),
          child: new GestureDetector(
            onTap: () => Navigator.of(context).push(new MaterialPageRoute(
                builder: (BuildContext context) => new DetailSitus(
                      list: list,
                      index: i,
                    ))),
            child: new Card(
              child: new ListTile(
                title: new Text(list[i]['nama_project']),
                leading: new Icon(Icons.widgets),
                subtitle: new Text("nama : ${list[i]['nama']}"),
              ),
            ),
          ),
        );
      },
    );
  }
}
