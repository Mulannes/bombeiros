import * as React from "react";
import { Image } from "expo-image";
import { StyleSheet, View, Text } from "react-native";
import { FontFamily, Color, FontSize } from "../GlobalStyles";

const FrameScreen = () => {
  return (
    <View style={styles.testParent}>
      <View style={[styles.test, styles.testPosition]}>
        <Image
          style={[styles.test, styles.testPosition]}
          contentFit="cover"
          source={require("../assets/rectangle-55.png")}
        />
        <Image
          style={[styles.testItem, styles.testPosition]}
          contentFit="cover"
          source={require("../assets/group-15.png")}
        />
        <View style={styles.testInner} />
        <View style={styles.rectangleView} />
        <Text style={[styles.esqueceuSuaSenha, styles.entrarTypo]}>
          Esqueceu sua senha?
        </Text>
        <Text style={[styles.entrar, styles.entrarTypo]}>Entrar</Text>
        <Text style={[styles.noTemUmaContainer, styles.entrarTypo]}>
          <Text style={styles.noTemUma}>{`Não tem uma conta `}</Text>
          <Text style={styles.cliqueAqui}>Clique Aqui</Text>
          <Text style={styles.noTemUma}>!</Text>
        </Text>
        <Text style={[styles.loremipsumloremcom, styles.entrarTypo]}>
          Loremipsum@lorem.com
        </Text>
        <View style={styles.mdilock} />
        <Text style={[styles.email, styles.emailTypo]}>Email:</Text>
        <Text style={[styles.senha, styles.emailTypo]}>Senha:</Text>
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  testPosition: {
    width: 435,
    left: 0,
    position: "absolute",
  },
  entrarTypo: {
    textAlign: "left",
    fontFamily: FontFamily.robotoRegular,
    position: "absolute",
  },
  testChildLayout: {
    height: 11,
    width: 11,
    top: 425,
    position: "absolute",
  },
  emailTypo: {
    color: Color.gray,
    fontSize: FontSize.size_sm,
    textAlign: "left",
    fontFamily: FontFamily.robotoRegular,
    position: "absolute",
  },
  test: {
    top: 0,
    height: 813,
  },
  testItem: {
    top: 420,
    height: 393,
  },
  testInner: {
    top: 282,
    left: 61,
    borderRadius: 20,
    backgroundColor: "#fff",
    shadowColor: "rgba(0, 0, 0, 0.25)",
    shadowOffset: {
      width: 4,
      height: 4,
    },
    shadowRadius: 10,
    elevation: 10,
    shadowOpacity: 1,
    width: 314,
    height: 371,
    position: "absolute",
  },
  rectangleView: {
    top: 509,
    backgroundColor: "#c21219",
    width: 200,
    height: 6,
    left: 118,
    position: "absolute",
  },
  esqueceuSuaSenha: {
    top: 461,
    left: 221,
    color: Color.black,
    fontSize: FontSize.size_3xs,
    fontFamily: FontFamily.robotoRegular,
  },
  entrar: {
    top: 523,
    left: 191,
    fontSize: 20,
    color: Color.black,
  },
  noTemUma: {
    color: Color.black,
  },
  cliqueAqui: {
    color: "#33338d",
  },
  noTemUmaContainer: {
    top: 621,
    left: 146,
    fontSize: FontSize.size_3xs,
    fontFamily: FontFamily.robotoRegular,
  },
  loremipsumloremcom: {
    top: 363,
    fontSize: 12,
    color: Color.black,
    left: 118,
  },
  mdilock: {
    left: 54,
    width: 24,
    height: 24,
    overflow: "hidden",
    top: 425,
    position: "absolute",
  },
  ellipseIcon: {
    left: 118,
  },
  testChild1: {
    left: 133,
  },
  testChild2: {
    left: 148,
  },
  testChild3: {
    left: 163,
  },
  testChild4: {
    left: 208,
  },
  testChild5: {
    left: 223,
  },
  testChild6: {
    left: 238,
  },
  testChild7: {
    left: 253,
  },
  testChild8: {
    left: 178,
  },
  testChild9: {
    left: 193,
  },
  email: {
    top: 335,
    left: 118,
  },
  senha: {
    top: 401,
    left: 117,
  },
  testParent: {
    flex: 1,
    width: "100%",
    height: 813,
  },
});

export default FrameScreen;
