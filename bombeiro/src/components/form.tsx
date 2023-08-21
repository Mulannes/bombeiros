import { View, Text, StyleSheet, Image, TextInput } from 'react-native'
import { useNavigation } from '@react-navigation/native'
import React, { useState } from 'react'
import { FlexBtn } from "../components/flexBtn"

// const [email , setEmail] = useState({value:"", error:""})
// const [password , setPassword] = useState({value:"", error:""})

export const Form = () => {
  return (
    <View style={Styles.container}>
      <View style={Styles.cube}>
      </View>
      <Image source={require('../../src/assets/images/Rectangle97.png')} style={[Styles.rec, Styles.rec1]} resizeMode='cover' />
      <Image source={require('../../src/assets/images/Rectangle98.png')} style={[Styles.rec, Styles.rec2]} resizeMode='cover' />
      <View style={[Styles.card, Styles.shadowProp]}>
        <View>
          <Text style={Styles.heading}>
            <TextInput
              placeholder="Email"

            // value={email.value}
            // error={!!email.error}
            // errorText={email.error}
            // description={undefined}
            />
            <TextInput
            // label='Password'
            // value={password.value}
            // error={!!password.erro-r}
            // errorText={password.error}
            // description={undefined}
            />
          </Text>
        </View>
        <FlexBtn />
      </View>
    </View>
  )
}

const Styles = StyleSheet.create({
  container: {
    width: "100%",
    flex: 1,
    position: "relative",
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
    alignItems: "center",
    position: "absolute",
    bottom: 175,
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
  rec: {
    flex: 1,
    width: 182,
    height: 72,
    position: "absolute",
    bottom: 319,
    zIndex: -1,
  },
  rec1: {
    right: 0,
  },
  rec2: {
    left: 0,
  },
  inputs: {
    backgroundColor: "transparent",
  }
});
const Colors = StyleSheet.create({
  blue: {
    color: "#33338D"
  }
})
