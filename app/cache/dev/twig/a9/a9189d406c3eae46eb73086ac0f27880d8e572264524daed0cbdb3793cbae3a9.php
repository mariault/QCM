<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_a4dbea8bc524a9ce5c345ca6455ff3fa6abdbde0c8936caf970c898a20bb1485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6284449be7e3df99ed711e386fce2dba28c62e319c0cf0fcbad5fa0bf7c1f1d8 = $this->env->getExtension("native_profiler");
        $__internal_6284449be7e3df99ed711e386fce2dba28c62e319c0cf0fcbad5fa0bf7c1f1d8->enter($__internal_6284449be7e3df99ed711e386fce2dba28c62e319c0cf0fcbad5fa0bf7c1f1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6284449be7e3df99ed711e386fce2dba28c62e319c0cf0fcbad5fa0bf7c1f1d8->leave($__internal_6284449be7e3df99ed711e386fce2dba28c62e319c0cf0fcbad5fa0bf7c1f1d8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ba8699beb850aaed7102e056ab69018ab498a7957a06062f003e7703a71d82fe = $this->env->getExtension("native_profiler");
        $__internal_ba8699beb850aaed7102e056ab69018ab498a7957a06062f003e7703a71d82fe->enter($__internal_ba8699beb850aaed7102e056ab69018ab498a7957a06062f003e7703a71d82fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ba8699beb850aaed7102e056ab69018ab498a7957a06062f003e7703a71d82fe->leave($__internal_ba8699beb850aaed7102e056ab69018ab498a7957a06062f003e7703a71d82fe_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f06f9ff6e1ce9d006852dda2fcf6152ffc65d5dd3c09342b2032d43c3e83c273 = $this->env->getExtension("native_profiler");
        $__internal_f06f9ff6e1ce9d006852dda2fcf6152ffc65d5dd3c09342b2032d43c3e83c273->enter($__internal_f06f9ff6e1ce9d006852dda2fcf6152ffc65d5dd3c09342b2032d43c3e83c273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f06f9ff6e1ce9d006852dda2fcf6152ffc65d5dd3c09342b2032d43c3e83c273->leave($__internal_f06f9ff6e1ce9d006852dda2fcf6152ffc65d5dd3c09342b2032d43c3e83c273_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4dde34d44ce82f2262c76cc3653d40d1330e462be44364079b7e759ffda186ad = $this->env->getExtension("native_profiler");
        $__internal_4dde34d44ce82f2262c76cc3653d40d1330e462be44364079b7e759ffda186ad->enter($__internal_4dde34d44ce82f2262c76cc3653d40d1330e462be44364079b7e759ffda186ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4dde34d44ce82f2262c76cc3653d40d1330e462be44364079b7e759ffda186ad->leave($__internal_4dde34d44ce82f2262c76cc3653d40d1330e462be44364079b7e759ffda186ad_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
