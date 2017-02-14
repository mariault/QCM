<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_3f2d75fb1f30114936c3c05baf94f86120af119af43d7013cbd2c1eb48a5c5fb extends Twig_Template
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
        $__internal_1537605ad849e944dda5675a1424f6957841f0591a25cd85efe42bf227d329ed = $this->env->getExtension("native_profiler");
        $__internal_1537605ad849e944dda5675a1424f6957841f0591a25cd85efe42bf227d329ed->enter($__internal_1537605ad849e944dda5675a1424f6957841f0591a25cd85efe42bf227d329ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1537605ad849e944dda5675a1424f6957841f0591a25cd85efe42bf227d329ed->leave($__internal_1537605ad849e944dda5675a1424f6957841f0591a25cd85efe42bf227d329ed_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d5591b3d99c3ccc4f073e146ae57e4c5e5c8fe139d45dc0da683ec9fe49178ee = $this->env->getExtension("native_profiler");
        $__internal_d5591b3d99c3ccc4f073e146ae57e4c5e5c8fe139d45dc0da683ec9fe49178ee->enter($__internal_d5591b3d99c3ccc4f073e146ae57e4c5e5c8fe139d45dc0da683ec9fe49178ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d5591b3d99c3ccc4f073e146ae57e4c5e5c8fe139d45dc0da683ec9fe49178ee->leave($__internal_d5591b3d99c3ccc4f073e146ae57e4c5e5c8fe139d45dc0da683ec9fe49178ee_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7e927f90efbfad227b5076e7eae72ce7fb1824b09922bd1c7f652d46762075d0 = $this->env->getExtension("native_profiler");
        $__internal_7e927f90efbfad227b5076e7eae72ce7fb1824b09922bd1c7f652d46762075d0->enter($__internal_7e927f90efbfad227b5076e7eae72ce7fb1824b09922bd1c7f652d46762075d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7e927f90efbfad227b5076e7eae72ce7fb1824b09922bd1c7f652d46762075d0->leave($__internal_7e927f90efbfad227b5076e7eae72ce7fb1824b09922bd1c7f652d46762075d0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_215dca16a5d34df825ec00e92fbc8fd186a00206bdaf79355dcd063ad03e0a3a = $this->env->getExtension("native_profiler");
        $__internal_215dca16a5d34df825ec00e92fbc8fd186a00206bdaf79355dcd063ad03e0a3a->enter($__internal_215dca16a5d34df825ec00e92fbc8fd186a00206bdaf79355dcd063ad03e0a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_215dca16a5d34df825ec00e92fbc8fd186a00206bdaf79355dcd063ad03e0a3a->leave($__internal_215dca16a5d34df825ec00e92fbc8fd186a00206bdaf79355dcd063ad03e0a3a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {%- autoescape false -%}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {%- endautoescape -%}*/
/* {% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
