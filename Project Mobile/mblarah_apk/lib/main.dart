import 'package:flutter/material.dart';
import 'package:mblarah_apk/view/situs_view.dart';
import 'package:mblarah_apk/view/hotel_view.dart';
import 'package:mblarah_apk/view/pray_view.dart';
import 'package:mblarah_apk/view/food_view.dart';

void main() => runApp(const MyApp());

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  static const appTitle = 'MBLARAH';

  @override
  Widget build(BuildContext context) {
    return const MaterialApp(
      title: appTitle,
      home: Home(),
    );
  }
}

class Home extends StatefulWidget {
  const Home({Key? key}) : super(key: key);

  @override
  _HomeState createState() => _HomeState();
}

class _HomeState extends State<Home> {
  int _currentIndex = 0;
  List _screens = [
    SitusViewPage(),
    HotelViewPage(),
    FoodViewPage(),
    PrayViewPage(),
  ];
  final GlobalKey<ScaffoldState> _scaffoldKey = new GlobalKey<ScaffoldState>();

  void _updateIndex(int value) {
    setState(() {
      _currentIndex = value;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      key: _scaffoldKey,
      appBar: AppBar(
        title: Text(
          'MBLARAH',
          style: TextStyle(fontFamily: 'Romantice'),
        ),
        actions: [
          Icon(Icons.favorite),
          Padding(
            padding: EdgeInsets.all(20.0),
          ),
          new IconButton(
            icon: new Icon(Icons.apps_sharp),
            onPressed: () => _scaffoldKey.currentState!.openEndDrawer(),
          ),
        ],
        backgroundColor: Colors.transparent,
        elevation: 0.0,
      ),
      extendBodyBehindAppBar: true,
      endDrawer: Drawer(
        child: ListView(
          // Important: Remove any padding from the ListView.
          padding: EdgeInsets.zero,
          children: [
            const DrawerHeader(
              decoration: BoxDecoration(
                image: DecorationImage(
                  image: AssetImage("assets/images/lamp.jpeg"),
                  fit: BoxFit.cover,
                ),
              ),
              child: Text(
                'MBLARAH',
                style: TextStyle(fontFamily: 'Romantice'),
              ),
            ),
            ListTile(
              title: const Text('Item 1'),
              onTap: () {
                // Update the state of the app
                // ...
                // Then close the drawer
                Navigator.pop(context);
              },
            ),
            ListTile(
              title: const Text('Item 2'),
              onTap: () {
                // Update the state of the app
                // ...
                // Then close the drawer
                Navigator.pop(context);
              },
            ),
          ],
        ),
      ),
      body: _screens[_currentIndex],
      bottomNavigationBar: BottomNavigationBar(
        type: BottomNavigationBarType.fixed,
        currentIndex: _currentIndex,
        onTap: _updateIndex,
        selectedItemColor: Colors.blue[700],
        selectedFontSize: 13,
        unselectedFontSize: 13,
        iconSize: 30,
        items: [
          BottomNavigationBarItem(
            label: "Situs Sejarah",
            icon: Icon(Icons.home),
          ),
          BottomNavigationBarItem(
            label: "Hotel",
            icon: Icon(Icons.search),
          ),
          BottomNavigationBarItem(
            label: "Kuliner",
            icon: Icon(Icons.grid_view),
          ),
          BottomNavigationBarItem(
            label: "Tempat Ibadah",
            icon: Icon(Icons.account_circle_outlined),
          ),
        ],
      ),
    );
  }
}
