<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_da9744f7629b11b7ba84ccae630fe5abc7995f7c87a4765bb77714f1e9984835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec3f3bc5aa18cf50207ab4f339b53da2934e613bda0634565f97403b17659879 = $this->env->getExtension("native_profiler");
        $__internal_ec3f3bc5aa18cf50207ab4f339b53da2934e613bda0634565f97403b17659879->enter($__internal_ec3f3bc5aa18cf50207ab4f339b53da2934e613bda0634565f97403b17659879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3f3bc5aa18cf50207ab4f339b53da2934e613bda0634565f97403b17659879->leave($__internal_ec3f3bc5aa18cf50207ab4f339b53da2934e613bda0634565f97403b17659879_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71ed3889d4068d8b0d929641341c36e99988e0cf813654c03f2976a57bfc0924 = $this->env->getExtension("native_profiler");
        $__internal_71ed3889d4068d8b0d929641341c36e99988e0cf813654c03f2976a57bfc0924->enter($__internal_71ed3889d4068d8b0d929641341c36e99988e0cf813654c03f2976a57bfc0924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_71ed3889d4068d8b0d929641341c36e99988e0cf813654c03f2976a57bfc0924->leave($__internal_71ed3889d4068d8b0d929641341c36e99988e0cf813654c03f2976a57bfc0924_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
