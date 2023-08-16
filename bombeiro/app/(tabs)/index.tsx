import { View, Text, StyleSheet, TouchableOpacity, Image } from 'react-native'
import React from 'react'
import { Form } from '../../src/components/form'
import { useNavigation } from '@react-navigation/native'
import { DisplayAnImage } from '../../src/components/imageBgLog'

export default function Index({ navigation }) {
  return (
    <View style={Styles.container}>
      <DisplayAnImage />
      <Form />
      <TouchableOpacity style={Styles.touch} onPress={() => {
        navigation.navigate("plano")
      }}>
        <Text>Next</Text>
      </TouchableOpacity>
    </View>
  )
}

const Styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: "center",
    justifyContent: "center",

  },
  touch: {
    width: 30,
    height: 30,
    backgroundColor: "red",
  },



})