<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6c7f357561db18db2d2a952bead8ae65cb40fd32df9c7ed51b193a06f167426a extends Twig_Template
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
        $__internal_a4a6c1794fbe26210b0359f10341b2778818660fae00080567770f266b5f8dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a6c1794fbe26210b0359f10341b2778818660fae00080567770f266b5f8dc7->enter($__internal_a4a6c1794fbe26210b0359f10341b2778818660fae00080567770f266b5f8dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1d18bc379a6d21eed280ad122755281d90cfa3271f936e4d490ddbe72c8833b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d18bc379a6d21eed280ad122755281d90cfa3271f936e4d490ddbe72c8833b1->enter($__internal_1d18bc379a6d21eed280ad122755281d90cfa3271f936e4d490ddbe72c8833b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a4a6c1794fbe26210b0359f10341b2778818660fae00080567770f266b5f8dc7->leave($__internal_a4a6c1794fbe26210b0359f10341b2778818660fae00080567770f266b5f8dc7_prof);

        
        $__internal_1d18bc379a6d21eed280ad122755281d90cfa3271f936e4d490ddbe72c8833b1->leave($__internal_1d18bc379a6d21eed280ad122755281d90cfa3271f936e4d490ddbe72c8833b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/simpleduc/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
