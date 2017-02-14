<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f75da77b853fc57378564087fcf5c4b461a98c0d880910a80c4c25b3f494aa2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_084d4ec5df3bb1bdf99ee56e918271953777ba9fcd88244c0ae03c4d4714f0c6 = $this->env->getExtension("native_profiler");
        $__internal_084d4ec5df3bb1bdf99ee56e918271953777ba9fcd88244c0ae03c4d4714f0c6->enter($__internal_084d4ec5df3bb1bdf99ee56e918271953777ba9fcd88244c0ae03c4d4714f0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_084d4ec5df3bb1bdf99ee56e918271953777ba9fcd88244c0ae03c4d4714f0c6->leave($__internal_084d4ec5df3bb1bdf99ee56e918271953777ba9fcd88244c0ae03c4d4714f0c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
