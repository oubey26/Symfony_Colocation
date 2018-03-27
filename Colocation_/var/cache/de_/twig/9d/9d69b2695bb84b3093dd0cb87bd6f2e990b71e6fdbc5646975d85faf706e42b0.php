<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_76278c69f6773d653999eee4ef434b6d4190fd9cceed06073974c034f7b2b387 extends Twig_Template
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
        $__internal_734f0b2b9c895d2cc4c339ed37b0a86749b97694912c8e865898e54d4c87bf6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734f0b2b9c895d2cc4c339ed37b0a86749b97694912c8e865898e54d4c87bf6a->enter($__internal_734f0b2b9c895d2cc4c339ed37b0a86749b97694912c8e865898e54d4c87bf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_677778755d95070e5c339314848f6d097742602a882a5486959739123b4dc429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677778755d95070e5c339314848f6d097742602a882a5486959739123b4dc429->enter($__internal_677778755d95070e5c339314848f6d097742602a882a5486959739123b4dc429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_734f0b2b9c895d2cc4c339ed37b0a86749b97694912c8e865898e54d4c87bf6a->leave($__internal_734f0b2b9c895d2cc4c339ed37b0a86749b97694912c8e865898e54d4c87bf6a_prof);

        
        $__internal_677778755d95070e5c339314848f6d097742602a882a5486959739123b4dc429->leave($__internal_677778755d95070e5c339314848f6d097742602a882a5486959739123b4dc429_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
