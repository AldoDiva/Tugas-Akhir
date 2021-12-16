import 'package:flutter/material.dart';

class PrayViewPage extends StatelessWidget {
  PrayViewPage({
    Key? key,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: new Container(
        width: double.infinity,
        height: double.infinity,
        decoration: BoxDecoration(
          image: DecorationImage(
            image: AssetImage("assets/images/pray.jpg"),
            fit: BoxFit.cover,
          ),
        ),
      ),
    );
  }
}
