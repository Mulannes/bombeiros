import { View, Text, StyleSheet, Image } from 'react-native'
import Rec1 from "../components/RectangleIcon"
import React from 'react'

export const Form = () => {
  return (
    <View style={Styles.container}>
      <View style={Styles.cube}>
        <Rec1 />
        <Image source={require('../../src/assets/images/Rectangle98.png')} style={Styles.rec2} resizeMode='cover' />
      </View>
      <View style={[Styles.card, Styles.shadowProp]}>
        <View>
          <Text style={Styles.heading}>
            React Native Box Shadow (Shadow Props)
          </Text>
        </View>
        <Text>
          Using the elevation style prop to apply box-shadow for iOS devices
        </Text>
      </View>
    </View>
  )
}

const Styles = StyleSheet.create({
  container: {
    width: "100%",
    flex: 1,
    alignItems: "center",
  },
  heading: {
    fontSize: 18,
    fontWeight: '600',
    marginBottom: 13,
  },
  card: {
    backgroundColor: 'white',
    borderRadius: 10,
    paddingVertical: 45,
    paddingHorizontal: 25,
    width: '70%',
    shadowColor: "rgba(0, 0, 0, 0.25)",
    shadowOffset: {
      width: 4,
      height: 4
    },
    shadowRadius: 10,
    elevation: 10,
    shadowOpacity: 1,
    flex: 1,
    height: 371,
    position: "relative",
  },
  shadowProp: {
    shadowColor: '#171717',
    shadowOffset: { width: 4, height: 4 },
    shadowOpacity: 0.2,
    shadowRadius: 3,
  },
  cube: {
    position: "absolute",
    bottom: 0,
    backgroundColor: "#fff",
    width: "100%",
    height: 321,
    zIndex: 0,
  },
  rec2: {
    width: "100%",
    height: 72,
    position: "absolute",
    top: 0,
  }
});
