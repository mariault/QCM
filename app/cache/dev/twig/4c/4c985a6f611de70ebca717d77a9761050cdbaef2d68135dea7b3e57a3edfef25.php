<?php

/* ::base.html.twig */
class __TwigTemplate_5a1ff325d6dd48b54cd8601cc861f86a5cd1ed3fefd177c873b00aa8c7fee1cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4394638f7350cf3f8ecd1beda259e78f44916ae4dd246bea77a7e14af99139c7 = $this->env->getExtension("native_profiler");
        $__internal_4394638f7350cf3f8ecd1beda259e78f44916ae4dd246bea77a7e14af99139c7->enter($__internal_4394638f7350cf3f8ecd1beda259e78f44916ae4dd246bea77a7e14af99139c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4394638f7350cf3f8ecd1beda259e78f44916ae4dd246bea77a7e14af99139c7->leave($__internal_4394638f7350cf3f8ecd1beda259e78f44916ae4dd246bea77a7e14af99139c7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3443e727459991d880011fc62a638e46df618a1fff5c54a028871e2bfa57cff4 = $this->env->getExtension("native_profiler");
        $__internal_3443e727459991d880011fc62a638e46df618a1fff5c54a028871e2bfa57cff4->enter($__internal_3443e727459991d880011fc62a638e46df618a1fff5c54a028871e2bfa57cff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "QCM";
        
        $__internal_3443e727459991d880011fc62a638e46df618a1fff5c54a028871e2bfa57cff4->leave($__internal_3443e727459991d880011fc62a638e46df618a1fff5c54a028871e2bfa57cff4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dac8c6621fa50d1441cef934471409ebe463e4cfae1466487f5ca9aa70aa7914 = $this->env->getExtension("native_profiler");
        $__internal_dac8c6621fa50d1441cef934471409ebe463e4cfae1466487f5ca9aa70aa7914->enter($__internal_dac8c6621fa50d1441cef934471409ebe463e4cfae1466487f5ca9aa70aa7914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dac8c6621fa50d1441cef934471409ebe463e4cfae1466487f5ca9aa70aa7914->leave($__internal_dac8c6621fa50d1441cef934471409ebe463e4cfae1466487f5ca9aa70aa7914_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a23c8c2faca3a808312742747c17c921d44f67b084f63f2af20bc972a0b2ef74 = $this->env->getExtension("native_profiler");
        $__internal_a23c8c2faca3a808312742747c17c921d44f67b084f63f2af20bc972a0b2ef74->enter($__internal_a23c8c2faca3a808312742747c17c921d44f67b084f63f2af20bc972a0b2ef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "Hello QCM";
        
        $__internal_a23c8c2faca3a808312742747c17c921d44f67b084f63f2af20bc972a0b2ef74->leave($__internal_a23c8c2faca3a808312742747c17c921d44f67b084f63f2af20bc972a0b2ef74_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09084fbb03f56a94265203a2c1309c27897b17193a395f6f516727d83d6db278 = $this->env->getExtension("native_profiler");
        $__internal_09084fbb03f56a94265203a2c1309c27897b17193a395f6f516727d83d6db278->enter($__internal_09084fbb03f56a94265203a2c1309c27897b17193a395f6f516727d83d6db278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_09084fbb03f56a94265203a2c1309c27897b17193a395f6f516727d83d6db278->leave($__internal_09084fbb03f56a94265203a2c1309c27897b17193a395f6f516727d83d6db278_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}QCM{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}Hello QCM{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
