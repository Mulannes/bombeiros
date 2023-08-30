import { View, Text, StyleSheet, TouchableOpacity,  } from 'react-native'
import React from 'react'
import { Form } from '../../src/components/form'
import { DisplayAnImage } from '../../src/components/imageBgLog'
import { NativeStackScreenProps } from '@react-navigation/native-stack'
import { RootStackParamList } from '../../routes'

type RouteProps = NativeStackScreenProps<RootStackParamList>;

export default function Index({ navigation }: RouteProps) {
  return (
    <View style={Styles.container}>
      <DisplayAnImage />
      <Form />
      {/* <TouchableOpacity style={Styles.touch} onPress={() => {
        navigation.navigate("plano")
      }}>
        <Text>Next</Text>
      </TouchableOpacity> */}
    </View>
  )
}

const Styles = StyleSheet.create({
  container: {
    flex: 1,
    width: "100%",
    height: "100%",
    alignItems: "center",
    justifyContent: "center",
  },
  touch: {
    width: 30,
    height: 30,
    backgroundColor: "red",
    position: "absolute",
    bottom: 0,
  },

})